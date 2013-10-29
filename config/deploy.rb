set :application, "vemsemfila"
set :repository,  "git@github.com:caioreis/vemsemfila.git"

set :scm, :git # You can set :scm explicitly or Capistrano will make an intelligent guess based on known version control directory names
# Or: `accurev`, `bzr`, `cvs`, `darcs`, `git`, `mercurial`, `perforce`, `subversion` or `none`

role :web, "ec2-107-22-73-129.compute-1.amazonaws.com"                          # Your HTTP server, Apache/etc
role :app, "ec2-107-22-73-129.compute-1.amazonaws.com"                          # This may be the same as your `Web` server
#role :db,  "your primary db-server here", :primary => true # This is where Rails migrations will run
#role :db,  "your slave db-server here"

set :deploy_to, "/var/www/#{application}"
set :use_sudo, false
set :admin_user, "root"
set :deploy_via, :remote_cache
set :copy_exclude, [".git", "spec"]
set :keep_releases, 2
default_run_options[:pty] = true

after "deploy:update", "deploy:cleanup"

# if you want to clean up old releases on each deploy uncomment this:
# after
