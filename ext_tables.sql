#
# Table structure for table 'tx_colormanager_domain_model_color'
#
CREATE TABLE tx_colormanager_domain_model_color (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,

	name varchar(255) DEFAULT '' NOT NULL,
	color varchar(255) DEFAULT '' NOT NULL,

	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,

	sys_language_uid int(11) DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid),

);

#
# Table structure for table 'pages'
#
CREATE TABLE pages (

	tx_colormanager_color_uid varchar(255) DEFAULT '' NOT NULL,
	tx_colormanager_color varchar(255) DEFAULT '' NOT NULL,

);