# cloudComputing_Baeten-Lenaerts

Dungeons&Dorks
A site created by Baeten Maarten & Lenaerts Nils


This Project uses several API's, some of them already exsisted, others we had to design our self. Below a list of the api's is shown
- Homebrew API
	- Created by Baeten Maarten & Lenaerts Nils
	- Language: PHP
	- Type: REST
	- Description:
		This api stores homebrew items and spells, which a user can create. These items or spells are then stored in a SQL local database.
		Be aware to choose unique names, since there can only be one item or spell with that name. 
		Before you start tinkering ont it, first take a look if someone already designed a spell with that name.
	
- Character API
	-Created by Baeten Maarten & Lenaerts Nils
	-Language: Python
	-Type: REST
	-Description:
		This api stores characters of the user in a realtime firebase database.
		Be aware to choose unique names. This will be adjusted in the future 
		Before you start tinkering ont it, first take a look if you already designed a character with that name.

- DnD 5e API
	Created by:
	Github link: https://github.com/5e-bits/5e-srd-api
	Type: Open RESTFull 
	Description:
		This api contains the core rules and mecanics of the DnD 5th system.
		The rules, Realm and Spell section contain info/data from this api.

- Calendar API
	-Created by Baeten Maarten & Lenaerts Nils
	-Language: C#
	-Type: SOAP
	-Description:

- DiceAPI
	-Created by: Steve B. Connor S. and others
	-Github link: https://github.com/meadsteve/DiceApi/
	-Type: Open RESTFull 
	-Description:
		This api generates random dice rolls, with different die.
		The roll section uses this api to randomly generate rolls for you to acces.

- Google Oauth 
	-Created by: Steve B. Connor S. and others
	-Type: Open RESTFull 
	-Description:
		This api generates random dice rolls, with different die.
		The roll section uses this api to randomly generate rolls for you to acces.


BaetenMaartenLenartsNils is the main project where the webapp is designed. As can be seen in the figure below, our website contains a navigation bar with different sections. 
This list below briefly shows a summary of the different sections
- Home
- Homebrew
- D&D Realm
- Rules
- Calendar
- Random Creator
- Login
- Roll
	
