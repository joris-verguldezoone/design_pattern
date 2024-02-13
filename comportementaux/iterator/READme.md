Le design pattern iterator permet d'énumérer les instances d'un objet contenu dans un tableau, 

On créer tout d'abord une infrastructure permettant de cibler des index dans un tableau et on l'applique a une (ou des) classes qui va répéter ses instance. ainsi pour implémenter de nouveaux objet on pourra continuer de passer par cette classe iterator au lieu d'itérer directement dans la classe que l'on utilise 

En résumé, le design pattern iterator permet de créer une abstraction autour du processus d'itération, séparant la logique de traversée de la structure interne de la collection. 

Cela facilite l'ajout de nouvelles fonctionnalités ou la modification de la structure de données sans impacter le code client. Les méthodes standard comme rewind(), valid(), key(), current(), et next() fournissent une interface cohérente et familière pour itérer sur les objets, améliorant la lisibilité et la maintenabilité du code. 

Ces méthodes sont issu de l'interface native Iterator et de type Traversable