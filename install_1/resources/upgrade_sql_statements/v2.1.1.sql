INSERT INTO `site_config` (`label`, `config_key`, `config_value`, `config_description`, `availableValues`,
                           `config_type`, `config_group`, `display_order`, `site_settings_hidden`)
SELECT 'Register Form Allow Password', 'register_form_allow_password', 'no', 'Allow users to choose their own passwords when registering.',
       '["yes","no"]', 'select', 'Security', 50, 1 FROM DUAL
WHERE NOT EXISTS (SELECT * FROM `site_config` WHERE `config_key`='register_form_allow_password' LIMIT 1);

INSERT INTO `site_config` (`label`, `config_key`, `config_value`, `config_description`, `availableValues`,
                           `config_type`, `config_group`, `display_order`, `site_settings_hidden`)
SELECT 'New Account Default File Privacy', 'new_account_default_file_privacy', 'Private',
       'When a new account is created, this sets the default file privacy option in their account settings.',
       '["Private", "Public"]', 'select', 'Site Options', 100, 0 FROM DUAL
WHERE NOT EXISTS (SELECT * FROM `site_config` WHERE `config_key`='new_account_default_file_privacy' LIMIT 1);

INSERT INTO `site_config` (`label`, `config_key`, `config_value`, `config_description`, `availableValues`,
                           `config_type`, `config_group`, `display_order`, `site_settings_hidden`)
SELECT 'Email Secure Method', 'email_secure_method', 'none', 'Whether the mail server requires SSL/TLS or None.',
       '[" ssl "," tls "," none "]', 'select', 'Email Settings', 15, 0 FROM DUAL
WHERE NOT EXISTS (SELECT * FROM `site_config` WHERE `config_key`='email_secure_method' LIMIT 1);
