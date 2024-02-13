Le design pattern chaine de responsabilité est basé sur une diversité de classe qui vont implémenter une méthode commune issu d'une interface dans le but de procéder étape par étape pour l'acceptation d'un processus. 


Un peu comme des middleware, leur but va être de se faire passer des données jusqu'a ce que tout soit validé ou invalidé par le processus. 

Cela permet d'avoir un code plus épuré, qui respecte le principe de responsabilité unique et qui permet d'intervenir au bon endroit lorsque l'on détecte un probleme dans la chaine