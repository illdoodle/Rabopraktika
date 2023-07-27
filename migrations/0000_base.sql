CREATE DATABASE IF NOT EXISTS site;

USE site;

CREATE TABLE IF NOT EXISTS `texts` (
    `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL,
    `text` text NOT NULL,
    PRIMARY KEY (`id`)
);
 
INSERT IGNORE INTO `texts` (`id`,`name`, `text`) VALUES
    ('1','about-title', 'О Space Station 14'),
    ('2','about-text', 'Space Station 14 вдохновлена культовой классикой <a href="https://spacestation13.com/">Space Station 13</a> и рассказывает историю о том, как обычная смена на космической станции пошла наперекосяк. Погрузитесь в свою роль, возитесь с проработанными системами и выживайте в хаосе в этой многопользовательской ролевой игре.'),
    ('3','help-title', 'Помогите! Я не могу найти руководство по X!'),
    ('4','help-text', 'Скорее всего, его еще не существует! Вики SS14, как и большинство вики, открыта для редактирования любым желающим. Для помощи и лучшей координации обратитесь в наш <a href="https://discord.gg/corvax">Discord</a>, там имеется отдельный канал для редакторов Вики.');