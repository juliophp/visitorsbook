#tayoSalary is a variable, remember the container we talked about yesterday?
#tayoSalary is a container that holds the value of tayo's salary.
#'input()' here means that we are telling the computer to display the message
# 'How much is tayo\'s salary?', so that tayo can input his salary through the
#keyboard. After Tayo inputs his salary, the '=' in between tayoSalary and input()
#means that we are assigning the value of tayo's salary to the tayoSalary variable
# or container if you like.
tayoSalary = input('How much is tayo\'s salary?: ');


#the question tells us that tayo has been saving for 5 years for his marriage, he saves
#25% every month, that's a lot of money considering how hard it is to save in this buhari's
#economy. :). which means in 5 years tayo has saved 25/100 of his total salary or 1/4 if you like.
#this translates to 0.25 of his whole salary for 12 months in a year for 5 years. we kept the value
#of 1/4th of tayo's salary into a variable called tayo's savings.
tayoSavings = 0.25 * (12 * 5 * tayoSalary);


#because we also need to no sola's wages before we can do any calculation, we created a container,
#or variable to 'solaWages' to hold or keep her wages per project. the input displays the question to Sola,
#and then the = sign assigns sola's wages to the variable/container we created known as 'solaWages'.
solaWages = input('How much does Sola charge per project?: ');


#the question also gave an insight on how sola earns her money, she earns on a per project basis
#but in the past 2 years, she has only done 9 projects which means she has done (2 * 9) projects in 2
#years. but she only saves 35% or 0.35 of her earnings per project. her savings will be 0.35*9*2 will be
#the value of her savings in the past 2 years.
solaSavings = 0.35 * (9 * 2);

#now that the computer has helped us calculate how much tayo and sola have saved for the past 5 and 2
#years respectively, we need to know how much they have in total as their budget. so we created a variable
#'totalSavings' which will keep the sum of tayoSavings and solaSavings.
totalSavings = tayoSavings + solaSavings;



#the second condition gave further insight on how they want to spend ther budget. they want to rent a house
#for 2 million naira and they also want to keep 20% of their savings after renting the house. This is a wise
#move because they are actively preparing for the marriage and not just the wedding. so we first need to
#subtract 2 million from their whole budget, and we need to get 80% of the balance because they have decided to
#save 20% of all their savings. so the budget for the wedding will be 80% of what we have left after subtracting
#2 million naira from their savings.

budgetForWedding = (totalSavings - 2000000) * 0.80;

#now that we know all the values, (thanks to the computer for an amazing and precise calculation) it is better for
#us to show the couple their results in a manner in which they can understand. so  we will print the total budget first
#and we will print their budget For the Wedding, thankfully we do not need to do tha calculation all over again, since
#the results are already stored in a variable. so the print method displays the result to the users of the program, in this
#case tayo and sola.
print('A - Their total budget is :' + str(totalSavings) + '\n');
print('B -  if their rent will cost 2 million naira and they will keep 20percent' + '\n' +  'of their savings after rent then their budget is:' + str(budgetForWedding) + '\n')



#now we were told Sola's mum wants her daughter to spend 7,150,000 for the wedding so we need to know if the
#wedding is over the budget or not so what we need to do is to subtract 7,150,000 from the budgetForWedding variable

if (budgetForWedding - 7150000) < 0:
    print('\n'+'The cost is over the budget'+'\n')
else:
    print('\n'+'The cost is within the budget'+'\n')


blue = 45000
white = 50000
green = 40000
countwhite = countblue = countgreen = 0

guestlist = ["Ajayi","Thomas","Sonaike","Nyingifa","Igwilo","Ajayi","Sonaike","Sonaike","Nyingifa","Igwilo","Sonaike","Nyingifa","Igwilo","Ajayi","Igwilo","Nyingifa","Ajayi","Ajayi","Nyingifa","Nyingifa","Ajayi","Nyingifa","Ajayi","Sonaike","Sonaike","Ajayi","Nyingifa","Sonaike","Nyingifa","Thomas","Ajayi","Igwilo","Ajayi","Sonaike","Sonaike","Nyingifa","Thomas","Igwilo","Sonaike", "Ajayi", "Igwilo"]

for name in guestlist:
    if name == "Ajayi":
        countwhite+=1
    elif name == "Thomas":
        countblue+=1
    else:
        countgreen+=1


print('Asoebi for the Ajayis will cost: ' + str(white * countwhite))
print('Asoebi for the Thompsons will cost: ' + str(blue * countblue))
print('Asoebi for other guests will cost: ' + str(green * countgreen))
