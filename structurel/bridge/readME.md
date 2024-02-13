Problématique: J'ai une classe qui prévoit une implémentation et qui irrigue mes enfants, mais je n'ai pas envie de modifier la classe mère pour prévoir les comportement de chacun de mes enfants.

Je décide alors de créer un pont entre le parent et les enfants pour qu'ils puissent implémenter leur propre comportement vis à vis de la méthode qu'il devront utiliser.

D'une part ils vont hériter des fonctionnalités du parent pour se comporter comme tel, mais ils vont également implémenter une interface qui les forcera a implémenter une méthode issu du parent a leur façon 