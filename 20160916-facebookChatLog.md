Conversation on September 1st 2016
> ...
>
> Damian Pound [11:54 PM]  
> I had an idea: we should both build a todo list app and compare the result.
> 
> [11:54]  
> Simple web app that saves to a database.
> 
> Juniper Barlett [11:55 PM]  
> Or, we can build a todo list app, I will do the backend, you can do the front end.
> 
> Damian Pound [11:55 PM]  
> I thought it would be useful to see how each of us would handle all areas on our own.
> 
> Juniper Barlett [11:56 PM]  
> Ok, makes sense
> 
> Damian Pound [11:57 PM]  
> And it's simple, just one table with an id and text field and the interface can Create, Update, Delete.
> 
> ...
> 
> Damian Pound [11:58 PM]  
> No worries about other users modifying data, just assume that after every edit is done, other users would refresh their page.
>
> [12:00]  
> Though it would be good to figure out a solution to that, probably involves building a locking system :confused:
> 
> [12:00]  
> Well, it definitely does.
> 
> Juniper Barlett [12:02 AM]  
> For expediency, lets not worry about logins, users, https, etc
> 
> [12:03]  
> Each session is a "user" with full permissions.
> 
> Damian Pound [12:22 AM]  
> First bit: exactly. Second bit: do you mean that we would base all interactions on the session id? If not, neat idea anyway.
> 
> Juniper Barlett [12:23 AM]  
> Just figured it would save time
> 
> Damian Pound [1:07 AM]  
> Definitely. Registration is kind of a bitch by itself. If done properly, it would need to collect email, username, and password with the requirement that it be strong (which is then hashed for database leak security), send a verification email, and possibly have an external authorizer like Facebook or Google for security. Even then, I feel like I'm probably missing something.
> 
> [1:09]  
> Would be neat to have a way to easily create and switch to other users though.
> 
> [1:10]  
> So just have a table like `user[user_id PRIMARY,name]`, then set which one you want to be using `$_SESSION['user_id']`
> 
> Juniper Barlett [1:11 AM]  
> One project at a time.  We can do that next
> 
> Damian Pound [1:11 AM]  
> If we want to simulate a multi user system easily.
> 
> Juniper Barlett [1:12 AM]  
> One table in MySQL, one of your earlier requirements
> 
> Damian Pound [1:13 AM]  
> If we want to do a single user/team todo list, sure.
> 
> Juniper Barlett [1:14 AM]  
> I got some surprise "features" crammed into that one table.
> 
> [1:14]  
> Then we can work on deciding how to merge / add to the project(s)
> 
> ...

