set :stages,        %w(testing development staging production mailer)
set :default_stage, "staging"
set :stage_dir,     "app/config"
require 'capistrano/ext/multistage'

set :application, "unified"
set :domain,     "52.17.199.45"
set :deploy_to,   "/opt/unified"
set :deploy_via, :copy

set :repository,  "file:///Users/bogdanvera/Documents/Dev/anApi/api"
set :scm,         :git
# Or: `accurev`, `bzr`, `cvs`, `darcs`, `subversion`, `mercurial`, `perforce`, or `none`

set :model_manager, "doctrine"
# Or: `propel`

role :web,        "52.16.120.12"
role :app,        "52.16.120.12", :primary=>true

set  :keep_releases,  3

set :user, "ubuntu"
set :use_sudo, false

set :branch, "master"

set :shared_files,      ["app/config/parameters.yml"]
set :shared_children,     [app_path + "/logs", "vendor", app_path + "/nonce", app_path + "/csv"]
set :use_composer, true
set :composer_options, "--no-dev --verbose --prefer-dist --optimize-autoloader"
set :interactive_mode, false
set :writable_dirs,       ["app/cache", "app/logs", "app/nonce", "app/csv"]
set :webserver_user,      "www-data"
set :permission_method,   :acl
set :use_set_permissions, true
set :dump_assetic_assets, true
set :default_environment, {
  'SYMFONY_DBHOST' => 'unifyapp.cqsju05skr8u.eu-west-1.rds.amazonaws.com',
  'SYMFONY_DBPORT' => '5432',
  'SYMFONY_DBUSER' => 'unifyapp',
  'SYMFONY_DBNAME' => 'unifyapp',
  'SYMFONY_DBPASSWORD' => 'CatMonkey1',
}
logger.level = Logger::MAX_LEVEL

ssh_options[:forward_agent] = true

# Be more verbose by uncommenting the following line
# logger.level = Logger::MAX_LEVEL

ssh_options[:forward_agent] = true
#ssh_options[:auth_methods] = "publickey"
ssh_options[:keys] = ["/Users/bogdanvera/Documents/Dev/anApi/unified.pem"]

namespace :deploy do
  task :predeploy, :roles => :web do
  end
end

before "deploy", "deploy:predeploy"
