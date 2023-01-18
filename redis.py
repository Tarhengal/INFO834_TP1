import redis
import sys

r = redis.Redis()
utilisateur = sys.argv[1]

def setUtilisateurSession(utilisateur):
    return r.set(utilisateur, 1)

def getUtilisateurSession(utilisateur):
    return r.get(utilisateur)

def incrementUtilisateurSession(utilisateur):
    return r.incr(utilisateur)

sessionCount = getUtilisateurSession(utilisateur)

if (sessionCount == None):
       setUtilisateurSession(utilisateur)
else:
    if(sessionCount <= 10):
        incrementUtilisateurSession(utilisateur)
        print(True) 
    else:
        print(False)