class Gant:
    def __init__(self, idGant, idTasca, descripcio, idUsuari):
        """ constructor de clase

        Args:
            idGant (int): id de cada Gant
            idTasca (int): id de la tarea en concreto
            descripcio (string): descripción del gant
            idUsuari (int): id de usuario
        """
        self.__idGant = idGant
        self.__idTasca = idTasca
        self.__descripcio = descripcio
        self.__idUsuari = idUsuari

    def assignarTasca(self):
        """ futura función que asignará tareas
        """
        pass

    def assignarUsuari(self):
        """ futura funcion que asignará usuarios
        """
        pass

    def crearTasca(self):
        """ futura función que creará tareas
        """
        pass

    def establirDurada(self):
        """ futura función que establecerá la duración de la tarea
        """
        pass

    def eliminarTasca(self):
        """ futura función para eliminar tareas
        """
        pass

    def modificarDurada(self):
        """ futura función para modificar la duración de una tarea
        """
        pass

    def desactivarGant(self):
        """ futura función para desactivar gant
        """
        pass
