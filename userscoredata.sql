CREATE TABLE `score` (
`pannumber` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
`first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
`last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
`bank_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
`loan_amount` int(50) NOT NULL,
`remarks` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
`score` int(10) NOT NULL,
`current_status` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
PRIMARY KEY (`pannumber`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;