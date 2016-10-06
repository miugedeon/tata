<?php 
/** 
 * 缩略图处理类 
 * 
 * author: silvester   sf.beyond@gmail.com  http://www.cnblogs.com/silvester 
 */
class Songfeng_Image_Ratio { 
    /** 
     * 图片大小比例调整 
     * 
     * @param $filename       图片路径 
     * @param $w　             目标宽度 
     * @param $h　　           目标高度 
     * @param $override       是否覆盖原文件 
     * @param $background  是否产生背景, 如果要求产生背景则产生图像是指定的大小，　图片内容居中 
     * @param $color            背影色 
     */
    public function RatioAdjuct($filename = '', $w = 340, $h = 300, $override = null, $background = null, $color = '0xFFFFFF') { 
        list ( $imgWidth, $imgHeight ) = getImageSize ( $filename ); 
          
        $ratioX = $imgWidth / $w; 
        $ratioY = $imgHeight / $h; 
        

			
        if ($ratioX > $ratioY || $ratioX == $ratioY) { 
            $dst_w = $w; 
            $dst_h = ceil ( $imgHeight / $ratioX ); 
        } else if ($ratioY > $ratioX) { 
            $dst_h = $h; 
            $dst_w = ceil ( $imgWidth / $ratioY ); 
        }
		
		if ($dst_w > $imgWidth && $dst_h > $imgHeight) { 
            $dst_w = $imgWidth; 
            $dst_h = $imgHeight;
		}
          
        //判断图片类型 
        switch (strtolower ( strrchr ( $filename, '.' ) )) { 
            case '.jpg' : 
            case '.jpeg' : 
                $im = imageCreateFromJpeg ( $filename ); 
                break; 
            case '.gif' : 
                $im = imageCreateFromGif ( $filename ); 
                break; 
              
            case '.png' : 
                $im = imageCreateFromPng ( $filename ); 
        } 
          
        //是否有背景色 
        if (null !== $background) { 
            //将背景色转换为十进制的红绿蓝值 
            $dec = hexdec ( $color ); 
            $red = 0xFF & ($dec >> 0x10); 
            $green = 0xFF & ($dec >> 0x8); 
            $blue = 0xFF & $dec; 
              
            //居中定位并复制 
            $dst_pos = array ('d_x' => 0, 'd_y' => 0 ); 
            ($dst_w == $w) ? ($dst_pos ['d_y'] = (($h - $dst_h) / 2)) : ($dst_pos ['d_x'] = (($w - $dst_w) / 2)); 
              
            $imBox = imageCreateTrueColor ( $w, $h ); 
            $color_bg = imageColorAllocate ( $imBox, $red, $green, $blue ); 
            imageFill ( $imBox, 0, 0, $color_bg ); 
            ImageCopyResampled ( $imBox, $im, $dst_pos ['d_x'], $dst_pos ['d_y'], 0, 0, $dst_w, $dst_h, $imgWidth, $imgHeight ); 
        } else { 
            $imBox = imageCreateTrueColor ( $dst_w, $dst_h ); 
            ImageCopyResampled ( $imBox, $im, 0, 0, 0, 0, $dst_w, $dst_h, $imgWidth, $imgHeight ); 
        } 
          
        //不替换源图片 
        if (null === $override) 
            $filename = str_replace ( strrchr ( $filename, '.' ), '', $filename ) . '_s.jpg'; 
		if (2 == $override) 
			$filename = str_replace ( strrchr ( $filename, '.' ), '', $filename ) . '_b.jpg'; 
          
        return imagejpeg ( $imBox, $filename) ? $filename : false; 
    } 
} 
