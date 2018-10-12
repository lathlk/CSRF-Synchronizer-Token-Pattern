# CSRF-Synchronizer-Token-Pattern
Voting application - Developed using php to prevent Cross Site Request Forgery based on Synchronizer Token Pattern

Steps to Run the application
1) Add the project directory to a php server
2) And access HOST/directory_name

Test Data
1) Login using(hardC coded for your convinience) following details:
	username: username
	password: password
2) Select the vote
3) Click on 'submit'
	If(user is authenticated){
		display the success message and vote is saved
	}
	else{
		display the error message
	}