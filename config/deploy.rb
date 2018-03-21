# config valid for current version and patch releases of Capistrano
lock "~> 3.10.1"

set :application,      "acmweb"
set :repo_url,       'git@github.com:tomlazar/acmweb.git'
set :deploy_to,        "/users/projects/acm/acmweb"

set :format, :pretty

namespace :app do
  task :update_rvm_key do
    execute :gpg, "--keyserver hkp://keys.gnupg.net --recv-keys D39DC0E3"
  end
end
before "rvm1:install:rvm", "app:update_rvm_key"


namespace :deploy do
  task :update_jekyll do
    on roles(:app) do
      within "#{deploy_to}/current" do
      	execute :jekyll, "build"
      end
    end
  end

end

after "deploy:symlink:release", "deploy:update_jekyll"
