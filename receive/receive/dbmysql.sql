CREATE TABLE `smsinbox` (
  `id` int(11) NOT NULL,
  `phone` text NOT NULL,
  `text` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `smsinbox`
  ADD UNIQUE KEY `id` (`id`);

ALTER TABLE `smsinbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;