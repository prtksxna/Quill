CREATE TABLE users (
  id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
  url TEXT,
  authorization_endpoint TEXT,
  token_endpoint TEXT,
  micropub_endpoint TEXT,
  micropub_access_token TEXT,
  micropub_scope TEXT,
  micropub_response TEXT,
  micropub_success INTEGER default 0,
  date_created datetime,
  last_login datetime,
  last_micropub_response TEXT,
  last_micropub_response_date datetime,
  location_enabled INTEGER NOT NULL default 0,
  syndication_targets TEXT,
  facebook_access_token TEXT,
  twitter_access_token TEXT,
  twitter_token_secret TEXT,
  twitter_username TEXT,
  instagram_access_token TEXT,
  email_username TEXT
);