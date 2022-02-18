class Hero:
    def __init__(self, inputName, inputHealth, inputPower, inputArmor):
        self.name = inputName
        self.health = inputHealth
        self.power = inputPower
        self.armor = inputArmor

hero1 = Hero('kelly',200,50,5)
hero2 = Hero('fort',100,10,500)
hero3 = Hero('adam',50,100,50)

print(hero1.name)
print(hero2.health)
print(hero3.power)

print(hero1.__dict__)
print(hero2.__dict__)
print(hero3.__dict__)
