import json
from files.PYTHON.funciones import actualizarDatos
import funciones

class recomanacio:
    def __init__(self,id, descripcio, estat):
        self.id = id
        self.descripcio = descripcio
        self.estat = estat
    def selectRecomanacio(id):
        query = ("SELECT * FROM Recomanacio WHERE id.Recomanacio = %s", (id))
        resultat = funciones.consultaDatos(query)
        return resultat
    def actualitzaRecomanacio(id,descripcio, estat):
        query = ("UPDATE Recomanacio SET Id= %s, Recomanacions= %s, Resposta= %s "(id,descripcio,estat))
        resultat = actualizarDatos(query)
        return resultat
    def inserirRecomanacio(id,descripcio, estat):
        query = ("INSERT INTO Recomanacio VALUES (%s,%s,%s) "(id,descripcio,estat))
        resultat = actualizarDatos(query)
        return resultat
    def eliminaRecomanacio(id):
        query = ("DELETE FROM Recomanacio WHERE id.Recomanacio = %s", (id))
        resultat = actualizarDatos(query)
        return resultat
class tasca(recomanacio):
    def __init__(self, id, nom, assignament, recomanacions):
        self.id = id
        self.nom = nom
        self.assignament = assignament
        self.recomanacions = recomanacions

    def aceptar(self, eleccio, assignament):
        super().assignament = assignament
        self.eleccio = eleccio
class tasca_presupost(tasca):
    def __init__(self, id, presupost, preu):
        self.id = id
        self.preu = preu
        self.presupost = presupost
