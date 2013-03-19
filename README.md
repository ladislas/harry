#Harry, a friend who wishes you well

##FTP Info

harrywishyouwell.com

Server ftp: ftp.harrywishyouwell.com ou ftp.cluster015.ovh.net

Login ou utilisateur: harrywis

Mot de passe: pm9b2jEi

##FTP Automatic Push

In order to simplify our production process, we want to automatically push the master branch to the server. Usually people use git on the remote production server but we don't have this option. After searching the web, we finally found an alternative : git-ftp.

We have configured git-ftp to automatically push the modified files of the master branch to the server.

For further information , check their github: https://github.com/resmo/git-ftp

##Concept

The idea behind harrywishyouwell is to provide a way for people to take short notes secretly.

Sometime, you see something that you want to write down but you're afraid that people will read what you're writing.

With harrywishyouwell, this is history. Just visit the website, enter your email address and type your text, hit enter and you're done!

You'll then receive a "regular mail from a friend" with your secret note inside. You can filter it so it won't appear in your inbox and read it later.

##Branches

Currently, there are two main branches:
*	master: master is the branch that we use to push to our server (see ftp info). Currently, our server does not support ssh (too expensive for a mvp) but if the idea takes off we'll eventually hire a better server with ssh and local git.
*	dev: the dev branch is used for development purpose. This is where we push our improvement to test them locally. If the changes are bug free, you can push them to the master, but you have to make sure your code has been reviewed by someone competent.
*	wip-name_of_the_user: those branches are self assigned and for convenient purpose only. It's useful if you are working from multiple computer, you can push your changes on the remote github server to keep your work up to date everywhere.