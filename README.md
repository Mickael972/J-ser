# Reseaux Social Jordan
## Base de données
### MCD
**Règles de gestion**
- Un utilisateur a un id et un mot de passe 
- Un utilisateur peut laisser un commentaire
- Un utilisateur peut ajouté une chaussure a ses favoris

- Une chaussure doit avoir un id 
- Une chaussure doit avoir une description
- Une chaussure doit avoir un lien vers un shop
- Une chaussure a une image
- Une chaussure a un prix 
- Une chaussure a une date de création

- Un commentaire a un id
- Un commentaire a un texte

- Un favoris a un id
- Un favoris a une date de création

**Dictionnaire de données**


| **Code Memonique** |  **Descritption**          | **Type** | **Taille** | **Commentaire** | 
|--------------------|----------------------------|----------|------------|-----------------|
|id_u                | id de l'utilisateur        |    N     |     10     |   *unsigned*    |
|name_u              | nom  de l'utilisateur      |    N     |     50     |                 |
|mdp_u               | mdp de l'utilisateur       |    AN    |     100    |                 |
|id_c                | id de la chaussure         |    N     |     10     |   *unsigned*    |
|name_c              | nom de la chaussure        |    N     |     50     |                 |
|des_c               | description de la chaussure|    AN    |    1000    |                 |
|lien_c              | lien de la chaussure       |    AN    |     100    |                 |
|img_c               | image de la chaussure      |    AN    |     50     |                 |
|prix_c              | prix de la chaussure       |    N     |     5      |                 |
|crea_date_c         | date de cre de la chaussure|   date   |     10     |                 |
|id_co               | id du commentaire          |    N     |     10     |   *unsigned*    |
|text_co             | text du commentaire        |    AN    |    1000    |                 |
|id_f                | id du favoris              |    N     |     10     |   *unsigned*    |
|crea_date_f         | date de cre du favoris     |   date   |     10     |                 |



**Dependance fonctionnel**


- <ins>id_u</ins> ? name_u, mpd_u
- <ins>id_c</ins> ? name_c, des_c, lien_c, img_c, prix_c, crea_date_c
- <ins>id_co</ins> ? text_co
- <ins>id_f</ins> ? crea_date_f


**finale MCD**

![DCM_draw](assets/img/finale%20MCD.png)
