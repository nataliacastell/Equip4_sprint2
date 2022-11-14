from turtle import color
from kivy.lang import Builder
from kivymd.app import MDApp
from kivymd.uix.boxlayout import MDBoxLayout
from kivymd.theming import ThemableBehavior
from kivymd.uix.list import MDList
from kivymd.uix.list import OneLineIconListItem
from kivy.uix.scrollview import ScrollView

class ContentNavigationDrawer(MDBoxLayout):
    pass    

class MyApp (MDApp):    
    def build(self):
        self.title = "PymeShield"

        scroll = ScrollView()

        list_view = MDList()
        for i in range(20):

            items = OneLineIconListItem(text=str(i) + ' item')
            list_view.add_widget(items)

        scroll.add_widget(list_view)

        return Builder.load_file("main2.kv")


MyApp().run()
