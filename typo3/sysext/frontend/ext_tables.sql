# Define table and fields since it has no TCA
CREATE TABLE fe_sessions (
	ses_id varchar(190) DEFAULT '' NOT NULL,
	ses_iplock varchar(39) DEFAULT '' NOT NULL,
	ses_userid int(11) unsigned DEFAULT '0' NOT NULL,
	ses_tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	ses_data mediumblob,
	ses_permanent tinyint(1) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (ses_id),
	KEY ses_tstamp (ses_tstamp)
) ENGINE=InnoDB;

CREATE TABLE fe_users (
	# These fields have no TCA column
	uc blob,
	is_online int(10) unsigned DEFAULT '0' NOT NULL,
	mfa mediumblob,

	KEY parent (pid,username(100)),
	KEY username (username(100)),
	KEY is_online (is_online)
);

CREATE TABLE sys_template (
	KEY roottemplate (deleted,hidden,root)
);

CREATE TABLE tt_content (
	# @todo: Needs a look for the default value.
	frame_class varchar(60) DEFAULT 'default' NOT NULL,
	# @todo: relies on the int type, would be autogenerated to TEXT
	colPos int(11) unsigned DEFAULT '0' NOT NULL,
	# @todo: Needs a look for default null and nullable
	table_caption varchar(255) DEFAULT NULL,

	KEY parent (pid,sorting),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
	KEY language (l18n_parent,sys_language_uid)
);
