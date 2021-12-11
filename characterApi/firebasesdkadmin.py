#firebase import
import firebase_admin
from firebase_admin import credentials
from firebase_admin import db

cred = credentials.Certificate('firebase-sdk.json')

firebase_admin.initialize_app(cred, {
    'databaseURL': 'https://dungeonsanddorks-334411-default-rtdb.europe-west1.firebasedatabase.app/'
})

#flask import
from flask import Flask, request
from flask_restful import Resource, Api
from flask_cors import CORS 

######################## FLASK ##############################
app = Flask(__name__)
CORS(app)
cors = CORS(app, resources={r"/api/*": {"origins": "*"}})
api = Api(app)


class Characters(Resource):
    def get(self):
        ref = db.reference('/characters')
        return ref.get()

    def post(self):
        ref = db.reference('/characters')
        json = request.get_json()
        name = json['name']
        race = json['race']
        classe = json['classe']

        classlevel = json['classlevel']
        background = json['background']
        alignment = json['alignment']
        xp = json['xp']

        strscore = json['strscore']
        dexscore = json['dexscore']
        conscore = json['conscore']
        intscore = json['intscore']
        wisscore = json['wisscore']
        chascore = json['chascore']

        char_ref = ref.push({
            'name':name,
            'race':race,
            'classe':classe,
            'classlevel':classlevel,
            'background':background,
            'alignment':alignment,
            'xp':xp,
            'score':{
                'strscore':strscore,
                'dexscore':dexscore,
                'conscore':conscore,
                'intscore':intscore,
                'wisscore':wisscore,
                'chascore':chascore
                }
            

        })


class Character(Resource):
    def get(self, name):
        ref = db.reference('/characters')
        # character . get children dna hebtge ID, en dan .name
        characters = ref.get()
        #print(characters) #{'-MqZy6bi26dBeZKKXITI': {'class': '123', 'name': 'test', 'race': 'test123'}, '-MqaWf9UEx23GskL7np0': {'class': 'Sorcerer', 'name': 'Ciana', 'race': 'Human'}}
        
        for charId in characters:
            #print(char)  #-MqZy6bi26dBeZKKXITI & next lus -MqaWf9UEx23GskL7np0
            #print(char[0]) # -
            new_ref=db.reference('/characters/' + charId)
            item = new_ref.get()
            #print(item) #{'class': '123', 'name': 'test', 'race': 'test123'} & next lus {'class': 'Sorcerer', 'name': 'Ciana', 'race': 'Human'}
            #print(item['name']) #ciana
            if(item['name'] == name):
                #print(item)
                return item


class UpdateCharacter(Resource):
    def post(self):
        ref = db.reference('/characters')
        json = request.get_json()

        name = json['name']
        race = json['race']
        classe = json['classe']

        classlevel = json['classlevel']
        background = json['background']
        alignment = json['alignment']
        xp = json['xp']

        strscore = json['strscore']
        dexscore = json['dexscore']
        conscore = json['conscore']
        intscore = json['intscore']
        wisscore = json['wisscore']
        chascore = json['chascore']
                
        characters = ref.get()
        print(characters)
        for charId in characters:
            new_ref=db.reference('/characters/' + charId)
            item = new_ref.get()
            if(item['name'] == name):
                item.update({
                    'name':name,
                    'race':race,
                    'classe':classe,
                    'classlevel':classlevel,
                    'background':background,
                    'alignment':alignment,
                    'xp':xp,
                    'score':{
                        'strscore':strscore,
                        'dexscore':dexscore,
                        'conscore':conscore,
                        'intscore':intscore,
                        'wisscore':wisscore,
                        'chascore':chascore
                        }
                })


api.add_resource(Characters,"/api/createCharacter", "/api/characters")
api.add_resource(Character,"/api/getCharacter/<name>")
api.add_resource(UpdateCharacter,"/api/updateCharacter")

if __name__ == "__main__":
    app.run(debug=True)

######################## FIREBASE  ###########################################################


'''
def setCharacter():
    ref = db.reference('/')
    ref.set({
        'character':{
        'char1': {
            'name':'fuckdaaa',
            'race':'dragonborn',
            'class':'Fighter'
        },
            'char2': {
            'name':'Nils',
            'race':'Elf',
            'class':'Wizard'
        }
        }
    })


def updateCharacter():
#updating data
    ref = db.reference('character')
    char_ref=ref.child('char1')
    char_ref.update({
        'name':'Faker'
    })

def multipleUpdate():
#multiple update
    ref = db.reference('character')
    ref.update({
        'char1/class':'warlock',
        'char2/race':'dwarf'
    })


def pushCharacter():
#adding value using push
    ref = db.reference('character2')
    char_ref = ref.push({
        'name':'janeke',
        'race':'tiefling',
        'class':'bard',
        'age':'21'
    })
    print(char_ref.key)


def getCharacter():
    #retrieving data
    ref = db.reference('character2')
    print(ref.get());
'''