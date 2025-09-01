# 📦 Lost&Found

Lost&Found est une plateforme web qui permet aux utilisateurs de publier et consulter des annonces pour des objets perdus ou trouvés.  
Grâce à une interface simple et intuitive, chacun peut retrouver ou rendre des objets importants en toute sécurité.

---

## ✨ Fonctionnalités

- 📢 **Annonces Perdus/Trouvés** : titre, description, photo, lieu et date.  
- 🔍 **Recherche & Filtrage** : par mots-clés, catégories (clés, vêtements, électronique, etc.), ou localisation.  
- 💬 **Commentaires** : échange avec la communauté sous chaque annonce.  
- 📊 **Statistiques** : nombre total de publications & annonces les plus populaires.  
- 🔐 **Authentification & Profils** : gestion des annonces personnelles (Laravel Breeze/Jetstream).  
- 📝 **Actions rapides** :  
  - Bouton **"Trouvé"** → signaler qu’un objet a été retrouvé.  
  - Bouton **"C’est à moi"** → revendiquer un objet trouvé.  

---

## 🛠️ Stack Technique

- **Framework** : Laravel  
- **Template Engine** : Blade  
- **Base de données** : PostgreSQL  
- **Frontend** : HTML · CSS · JavaScript  

---

## 🚀 Installation & Lancement

1. **Cloner le projet**
   ```bash
   git clone https://github.com/ahmedbenkrarayc/lost-found.git
   cd lost-found
   ```

2. **Installer les dépendances**
   ```bash
   composer install
   npm install && npm run dev
   ```

3. **Configurer l’environnement**
   - Copier `.env.example` en `.env`
   - Modifier les variables de connexion à la base PostgreSQL :
     ```
     DB_CONNECTION=pgsql
     DB_HOST=127.0.0.1
     DB_PORT=5432
     DB_DATABASE=lostfound_db
     DB_USERNAME=postgres
     DB_PASSWORD=secret
     ```

4. **Générer la clé d’application**
   ```bash
   php artisan key:generate
   ```

5. **Exécuter les migrations**
   ```bash
   php artisan migrate
   ```

6. **Lancer le serveur**
   ```bash
   php artisan serve
   ```
