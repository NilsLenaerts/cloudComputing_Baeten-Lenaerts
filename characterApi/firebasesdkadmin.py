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

    strmod = json['strmod']
    dexmod = json['dexmod']
    conmod = json['conmod']
    intmod = json['intmod']
    wismod = json['wismod']
    chamod = json['chamod']

    profbonus = json['profbonus']
    #otherprofs=json['otherprofs']

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
        },
        'mod':{
            'strmod':strmod,
            'dexmod':dexmod,
            'conmod':conmod,
            'intmod':intmod,
            'wismod':wismod,
            'chamod':chamod
        },
        'profbonus':profbonus,
        'save':{
            'strsavebonus':'',
            'dexsavebonus':'',
            'consavebonus':'',
            'wissavebonus':'',
            'intsavebonus':'',
            'chasavebonus':''
        },
        'skill':{
            'acrobatics' :'',
            'animal' :'',
            'arcana':'',
            'athletics':'',
            'deception':'',
            'history':'',
            'insight':'',
            'intimidation':'',
            'investigation':'',
            'medicine':'',
            'nature':'',
            'perception':'',
            'performance':'',
            'persuasion':'',
            'religion':'',
            'sleight':'',
            'stealth':'',
            'survival':''
        },
        'ac':'',
        'pap':'',
        'speed':'',
        'otherprofs':'',
        'hp':{
            'maxhp':'',
            'currenthp':'',
            'temphp':'',
            'remaininghd':''
        },
        'combat':{
            'atkname1':'',
            'atkbonus1':'',
            'atkdamage1':'',

            'atkname2':'',
            'atkbonus2':'',
            'atkdamage2':'',

            'atkname3':'',
            'atkbonus3':'',
            'atkdamage3':'',
            'textareacombat':''
        },
        'money':{
            'cp':'',
            'sp':'',
            'ep':'',
            'gp':'',
            'pp':''
        },
        'equipment':'',
        'flavor':{
            'personality':'',
            'ideals':'',
            'bonds':'',
            'flaws':'',
        },
        'features':'',    

    })
    return "succes"
@app.route("/api/getCharacter/<name>/<email>")
@cross_origin(origin='*')
def getChar(name,email):
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
        if(item['name'] == name and item['email'] == email):
            #print(item)
            return item

@app.route("/api/updateCharacter", methods=['POST'])

@cross_origin(origin='*')
def updateChar():
    ref = db.reference('/characters')
    json = request.get_json()

    name = json['name']
    email=json['email']
    race = json['race']
    classe = json['classe']

    classlevel = json['classlevel']
    background = json['background']
    alignment = json['alignment']
    print(json)
    print("email:" + email)
    xp = json['xp']

    strscore = json['strscore']
    dexscore = json['dexscore']
    conscore = json['conscore']
    intscore = json['intscore']
    wisscore = json['wisscore']
    chascore = json['chascore']

    strmod = json['strmod']
    dexmod = json['dexmod']
    conmod = json['conmod']
    intmod = json['intmod']
    wismod = json['wismod']
    chamod = json['chamod']

    strsavebonus = json['strsavebonus']
    dexsavebonus = json['dexsavebonus']
    consavebonus = json['consavebonus']
    wissavebonus = json['wissavebonus']
    intsavebonus = json['intsavebonus']
    chasavebonus = json['chasavebonus']

    acrobatics =json['acrobatics']
    animal =json['animal']
    arcana=json['arcana']
    athletics=json['athletics']
    deception=json['deception']
    history=json['history']
    insight=json['insight']
    intimidation=json['intimidation']
    investigation=json['investigation']
    medicine=json['medicine']
    nature=json['nature']
    perception=json['perception']
    performance=json['performance']
    persuasion=json['persuasion']
    religion=json['religion']
    sleight=json['sleight']
    stealth=json['stealth']
    survival=json['survival']


    ac=json['ac']
    pap=json['pap']
    speed=json['speed']

    maxhp=json['maxhp']
    currenthp=json['currenthp']
    temphp=json['temphp']
    remaininghd=json['remaininghd']

    otherprofs=json['otherprofs']

    atkname1=json['atkname1']
    atkbonus1=json['atkbonus1']
    atkdamage1=json['atkdamage1']

    atkname2=json['atkname2']
    atkbonus2=json['atkbonus2']
    atkdamage2=json['atkdamage2']

    atkname3=json['atkname3']
    atkbonus3=json['atkbonus3']
    atkdamage3=json['atkdamage3']
    textareacombat=json['textareacombat']

    cp=json['cp']
    sp=json['sp']
    ep=json['ep']
    gp=json['gp']
    pp=json['pp']

    equipment=json['equipment']

    personality=json['personality']
    ideals=json['ideals']
    bonds=json['bonds']
    flaws=json['flaws']

    features=json['features']

    characters = ref.get()
    #print(characters)
    for key,val in characters.items():
        if(val['name'] == name and val['email']== email):
            update_ref = ref.child(key)
            update_ref.update({
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
                },
                'mod':{
                    'strmod':strmod,
                    'dexmod':dexmod,
                    'conmod':conmod,
                    'intmod':intmod,
                    'wismod':wismod,
                    'chamod':chamod
                },
                'save':{
                    'strsavebonus':strsavebonus,
                    'dexsavebonus':dexsavebonus,
                    'consavebonus':consavebonus,
                    'wissavebonus':wissavebonus,
                    'intsavebonus':intsavebonus,
                    'chasavebonus':chasavebonus
                },  
                'skill':{
                    'acrobatics' :acrobatics,
                    'animal' :animal,
                    'arcana':arcana,
                    'athletics':athletics,
                    'deception':deception,
                    'history':history,
                    'insight':insight,
                    'intimidation':intimidation,
                    'investigation':investigation,
                    'medicine':medicine,
                    'nature':nature,
                    'perception':perception,
                    'performance':performance,
                    'persuasion':persuasion,
                    'religion':religion,
                    'sleight':sleight,
                    'stealth':stealth,
                    'survival':survival
                },
                'otherprofs':otherprofs,
                'ac':ac,
                'pap':pap,
                'speed':speed,
                'hp':{
                    'maxhp':maxhp,
                    'currenthp':currenthp,
                    'temphp':temphp,
                    'remaininghd':remaininghd
                },

                'combat':{

                    'atkname1':atkname1,
                    'atkbonus1':atkbonus1,
                    'atkdamage1':atkdamage1,

                    'atkname2':atkname2,
                    'atkbonus2':atkbonus2,
                    'atkdamage2':atkdamage2,

                    'atkname3':atkname3,
                    'atkbonus3':atkbonus3,
                    'atkdamage3':atkdamage3,
                    'textareacombat':textareacombat,
                },
                'money':{
                    'cp':cp,
                    'sp':sp,
                    'ep':ep,
                    'gp':gp,
                    'pp':pp,
                },
                'equipment':equipment,
                'flavor':{
                    'personality':personality,
                    'ideals':ideals,
                    'bonds':bonds,
                    'flaws':flaws,
                },
                'features':features,   

            })
    return "Succes"


@app.route("/api/getMyCharacters/<email>")
@cross_origin(origin='*')
def getCharacters(email):
    jsontot=[]
    ref = db.reference('/characters')
    characters = ref.get()
    if(characters):
        for charId in characters:
            new_ref=db.reference('/characters/' + charId)
            item = new_ref.get()
            
            if(item['email'] == email):
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

@app.route("/api/deleteCharacter", methods = ['POST'])
@cross_origin(origin='*')
def DeleteCharacter():
    ref = db.reference('/characters')
    characters = ref.get()
    json = request.get_json()
    name = json['name']
    email = json['email']
    print(json)
    print(email)
    print("1")
    for key,val in characters.items():
        print("2")
        print(val['name'])
        if(val['name'] == name and val['email'] == email):
            print('3')
            delete_ref = ref.child(key)
            delete_ref.delete()
            print('4')
    return "succes"



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