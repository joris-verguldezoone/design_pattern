Structurel :
flyweight: optimiser la RAM en partageant les attribut d’une classe dupliqués, dans une sous classes.

Si j’ai 1000 instances de commentaires et que certains d’entre eux partagent des informations dupliquées tel que l’ID du post, l’ID user, le ROLE alors je peux extraire ces attribut qui sont communs dans une classe flyweight.
Cette classes créera un tableau qui contiendra les information d’instance dupliqué puis dans ma classe de base j’aurais un attribut et un getter qui me permettront d’utiliser la référence a l’instance de ma classe flyweight pour utiliser les info completant mon user sans que celle si soit dupliqué. J”aurai par exemple une instance flyweight qui regroupe les meme information pour un certains nombre d’instance de User

Ici on utilise une factory pour pouvoir bien référencer toutes les instances de mes flyweight et les partager a la création du user dans la meme fonction
