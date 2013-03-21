#Harry, a friend who wishes you well

##Concept

The idea behind harrywishyouwell is to provide a way for people to take short notes secretly.

Sometime, you see something that you want to write down but you're afraid that people will read what you're writing.

With harrywishyouwell, this is history. Just visit the website, enter your email address and type your text, hit enter and you're done!

You'll then receive a "regular mail from a friend" with your secret note inside. You can filter it so it won't appear in your inbox and read it later.

##Roadmap
Here are the things we want to accomplish more or less ordered by importance. We have to :

*	Secure the PHP mail() - IMPORTANT
*	Create subdomain alpha.harrywishyouwell.com and redirect to it
*	Count the number of people visiting the website - WIP
*	Count the number of people visiting the website at the same time
*	Count the number of secret emails sent
*	Count the number of emails sent/IP
*	Limit the number of emails sent/IP - IMPORTANT
*	Add a counter so that the person knows how much email he/she has left - IMPORTANT
*	Prevent people from sending the message to multiple recipients - IMPORTANT
*	At the same time, find a "back-door" to allow people to send emails to multiple recipients using a custom code.
*	Create a way to sign up and log in to. This will provide us a way to "know" the person behind the account and provide "unlimited" secrets
*	<del>Create a twitter account harrywishuwell and tweet about the project</del> - DONE
*	Integrate the tweets on the main page
*	Catch sent secrets and tweet them randomly if the person has opt-in'ed


##Branches

Currently, there are two main branches:
*	master: master is the branch that we use to push to our server (see ftp info). Currently, our server does not support ssh (too expensive for a mvp) but if the idea takes off we'll eventually hire a better server with ssh and local git.
*	dev: the dev branch is used for development purpose. This is where we push our improvement to test them locally. If the changes are bug free, you can push them to the master, but you have to make sure your code has been reviewed by someone competent.
*	wip-name_of_the_user: those branches are self assigned and for convenient purpose only. It's useful if you are working from multiple computer, you can push your changes on the remote github server to keep your work up to date everywhere.

##FTP Info

For the ftp info, send us a private message @[harrywishuwell](https://twitter.com/harrywishuwell)

##FTP Automatic Push

In order to simplify our production process, we want to automatically push the master branch to the server. Usually people use git on the remote production server but we don't have this option. After searching the web, we finally found an alternative: [git-ftp](https://github.com/resmo/git-ftp).

We have configured git-ftp to automatically push the modified files of the master branch to the server.

For further information, check their github: [git-ftp](https://github.com/resmo/git-ftp)


