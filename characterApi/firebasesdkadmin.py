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

        char_ref = ref.push({
            'name':name,
            'race':race,
            'class':classe
        })


class Character(Resource):
    def get(self, name):
        ref = db.reference('/characters/' + name)
        return ref.get()

api.add_resource(Characters,"/api/createCharacter", "/api/characters")
api.add_resource(Character,"/api/getCharacter/<name>")

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