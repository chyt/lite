CREATE TABLE IF NOT EXISTS `liteblog` (
  `id` int(255) NOT NULL auto_increment,
  `title` varchar(9999999) NOT NULL,
  `body` varchar(9999999) NOT NULL,
  `date` varchar(9999999) NOT NULL,
  PRIMARY KEY  (`id`)
)

CREATE TABLE IF NOT EXISTS `liteblog_settings` (
  `id` int(1) NOT NULL,
  `border_outmost` varchar(6) NOT NULL,
  `border_blogbox` varchar(6) NOT NULL,
  `color_title` varchar(6) NOT NULL,
  `color_title_mouseover` varchar(6) NOT NULL,
  `color_text` varchar(6) NOT NULL,
  `color_date` varchar(6) NOT NULL,
  `title_size` varchar(99) NOT NULL,
  `text_size` varchar(99) NOT NULL,
  `date_size` varchar(99) NOT NULL,
  `font` varchar(99) NOT NULL,
  `width` varchar(99) NOT NULL
)

INSERT INTO `liteblog_settings` (`id`, `border_outmost`, `border_blogbox`, `color_title`, `color_title_mouseover`, `color_text`, `color_date`, `title_size`, `text_size`, `date_size`, `font`, `width`) VALUES
(1, '000000', 'CCCCCC', '222222', 'CCCCCC', '000000', '222222', '36', '18', '14', 'sans-serif', '1000');