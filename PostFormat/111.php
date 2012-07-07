<?php while($this->next()): $format = PostFormat_Plugin::getFormat();?>
	<?php if ($format == 'post') { ?>
		// 一般文章形式
	<?php } elseif ($format == 'image'){ ?>
		// 图片
	<?php } elseif ($format == 'phrase'){ ?>
		// 短语 类似微博
	<?php } elseif ($format == 'link'){ ?>
		// 链接
	<?php }?>
<?php endwhile; ?>