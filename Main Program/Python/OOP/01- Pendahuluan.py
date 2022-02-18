class Hero: # template
    pass

hero1 = Hero() # object / instance ( instansiate )
hero2 = Hero()
hero3 = Hero()

hero1.name = 'kelly'
hero1.health = 200

hero2.name = 'fort'
hero2.name = 100

hero3.name = 'adam'
hero3.helth = 50

print(hero1)
print(hero1.__dict__)
print(hero1.name)
