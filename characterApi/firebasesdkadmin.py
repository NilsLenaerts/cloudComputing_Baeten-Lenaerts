#firebase import
import firebase_admin
from firebase_admin import credentials
from firebase_admin import db

cred = credentials.Certificate('firebase-sdk.json')

firebase_admin.initialize_app(cred, {
    'databaseURL': 'https://dungeonsanddorks-334411-default-rtdb.europe-west1.firebasedatabase.app/'
})

#flask import
from flask import Flask, request, jsonify
from flask_restful import Resource, Api
from flask_cors import CORS, cross_origin

######################## FLASK ##############################
app = Flask(__name__)
CORS(app)
cors = CORS(app, resources={r"/api/*": {"origins": "*"}})
api = Api(app)

@app.route("/")
def home():
    return "Hello, flask"


@app.route('/characters')
@cross_origin(origin='*')
class Characters(Resource):
    def get(self):
        ref = db.reference('/characters')
        return ref.get()

    def post(self):
        ref = db.reference('/characters')
        json = request.get_json()

        email = json['email']
        #print(email)
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

        
        ref.push({
            'email':email,
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

@app.route("/api/createCharacter", methods = ['POST'])
def createChar():
    ref = db.reference('/characters')
    json = request.get_json()
    print(json)

    email=json['email' ]
    print(email)
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
        'email':email,

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
    return "succes"
@app.route("/api/getCharacter/<name>")
@cross_origin(origin='*')
def getChar(name):
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

@app.route("/api/updateCharacter")
@cross_origin(origin='*')
def updateChar():
    ref = db.reference('/characters')
    json = request.get_json()

    name = json['name']
    race = json['race']
    classe = json['classe']

    classlevel = json['classlevel']
    background = json['background']
    alignment = json['alignment']
    print(alignment)
    xp = json['xp']

    strscore = json['strscore']
    dexscore = json['dexscore']
    conscore = json['conscore']
    intscore = json['intscore']
    wisscore = json['wisscore']
    chascore = json['chascore']
            
    characters = ref.get()
    #print(characters)
    for key,val in characters.items():
        if(val['name'] == name):
            delete_ref = ref.child(key)
            delete_ref.update({
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
    return "Succes"


@app.route("/api/getMyCharacters/<name>")
@cross_origin(origin='*')

def getCharacters(name):
    jsontot=[]
    ref = db.reference('/characters')
    characters = ref.get()

    for charId in characters:
        new_ref=db.reference('/characters/' + charId)
        item = new_ref.get()
        
        if(item['email'] == name):
            #print(item)
            jsontot.append(item)
    print("list")
    print(jsontot)
    print("endOfList")
    return jsonify(jsontot)

class MyCharacters(Resource):
    def get(self, email):
        jsontot=[]
        ref = db.reference('/characters')
        characters = ref.get()

        for charId in characters:
            new_ref=db.reference('/characters/' + charId)
            item = new_ref.get()
            
            if(item['email'] == email):
                #print(item)
                jsontot.append(item)
        print("list")
        print(jsontot)
        print("endOfList")
        return jsonify(jsontot == list)


class DeleteCharacter(Resource):
    def post(self):
        ref = db.reference('/characters')
        characters = ref.get()
        json = request.get_json()
        name = json['name']
        #print(name)
        for key,val in characters.items():
            if(val['name'] == name):
                delete_ref = ref.child(key)
                delete_ref.delete()
    



#api.add_resource(Characters,"/api/createCharacter", "/api/characters")
#api.add_resource(Character,"/api/getCharacter/<name>")
#api.add_resource(MyCharacters,"/api/getMyCharacters/<email>")
#api.add_resource(DeleteCharacter,"/api/deleteCharacter")
#api.add_resource(UpdateCharacter,"/api/updateCharacter")


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