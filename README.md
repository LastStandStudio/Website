# Last Stand Studio Website

This is the public repository for LS.Studio's PHP MVC website. Stay up to date with development on [Trello](https://trello.com/b/farQduUj).

## Branches

We publish our source code to make this project work properly in 3 Major branches.

1. The [Master](https://github.com/LastStandStudio/Website/tree/master) is the "Release" branch, 
all the code in this branch is well tested for reliability as well as security. This branch needs to have production 
ready code at all times so it can be loaded directly from the server itself.

2. The [Beta](https://github.com/LastStandStudio/Website/tree/beta) branch is for testing cutting edge code that may or
may not have broken something somewhere for some reason. All the code from this branch will have been merged from
the development branch and then fine tuned for release. All of the TODOs should already be done and out of all of the code in this branch.

3. The [Development](https://github.com/LastStandStudio/Website/tree/development) branch, where all of the cutting edge
code gets dumped into and where all of the pull request should be made to. Once the code here is functional and matured,
a merge request should be sent to the beta branch for pre-deployment preperations. This is where TODOs are put in and completed. Once the code is at a state of 0 TODOs with the exeption of long term ideas. The code should be pushed to beta for final debugging.

## Sub Domains

This repository not only has the main Last Stand Studio website, but also many projects and side projects attached,
this is a table of contence for each of the sub websites. The directories of theses websites look typicly like this 
    
    http://laststandstudio.com/Sub-Website
    
* [Somnia](), LS. Studio's first title.
* Our [Minecraft]() Server Website, used for many things.
* [Thomas Steinholz]()'s Home Page, yes this is for the creator of LS. Studio.

## How to Contribute

Last Stand Studio is not just a business, but a community. And a great way to be a part of this community is to get involved in our public repos. This is one of our many open-source and public works of code. Having code like this public makes it so that people can see how we used certain tools to make their own dreams a reality. Also putting code in the public domain is a nice way to guarantee pretty code, knowing people can/will review it. Now it is time to learn how to contribute.

#### A. Instructions for Forking:
1. Hit the fork button on GitHub

#### B. Instructions for Git Bash/Terminal
1. `mkdir LS.Website`
2. `cd LS.Website`
3. `git clone https://github.com/${Your Github Username}/Website`
4. `git checkout development`

Now you should have a local copy of this repository, it is important to note that all pull request should be made to the [Development](https://github.com/LastStandStudio/Website/tree/development) of this repository. For more read "Branches" above. Once you have made your changes, it is time to create a pull request.

#### C. Instructions for Pull Requests
1. `git add --all`
2. `git commit -m "Tell us what you changed"`
3. `git push`
4. Go to Github in your web browser
5. Hit the create pull request button
6. Give us some information about what you did and why
7. Get your pull request excepted

Note: It is always good to keep your project up-to-date, one way to do this is to update your project before you begin work on it and keeping your changes small and commit constantly. It is easier to accept a bunch of small changes over one large change. Of course you can disregard this if you don't mind merging changes.

#### D. Instructions for Updating your Fork
1. `git fetch upstream`
2. `git checkout master`
3. `git rebase upstream/master`
4. `git checkout beta`
5. `git rebase upstream/beta`
6. `git checkout development`
7. `git rebase upstream/development`

## Other Information

Feel free to edit any file in this repository including this README.md if you see anything that is incorrect! :)
