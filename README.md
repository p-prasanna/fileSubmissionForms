# fileSubmissionForms

1) create a folder named "uploads" before getting started.

2) execute the following piece of query in your database to create a folder names "resumes"

CREATE TABLE `resumes` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `uploaded_on` datetime NOT NULL,
 `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
