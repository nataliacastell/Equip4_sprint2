import json

class recomanacio:
    def __init__(self,id, descripcio, estat):
        self.id = id
        self.descripcio = descripcio
        self.estat = estat
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
    def __init__(self, id, presupost, preu)
        self.id = id
        self.preu = preu
        self.presupost = presupost