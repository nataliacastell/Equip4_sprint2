from distutils.command.build_ext import build_ext
from kivymd.app import MDApp
from kivy.lang import Builder
from kivy.uix.floatlayout import FloatLayout
from kivymd.uix.menu import MDDropdownMenu

class Prova(FloatLayout):
    def drpdown_ (self):
        self.menu = [
            {
                "viewclass":"OneLineListItem"
                "text": "Example 1"
                "on_release": lambda x="Exemple 1" : self.test1()
            },
            {
                "viewclass":"OneLineListItem"
                "text": "Example 1"
                "on_release": lambda x="Exemple 1" : self.test2()
            }

        ]

        

    def test1(self):
        print("Test 1 ha sigut accionat")

    def test2(self):
        print("Test 2 ha sigut accionat")


    Builder.load_file("style.kv")

class Main(MDApp):
    def build(self):
        return Prova()

Main().run()