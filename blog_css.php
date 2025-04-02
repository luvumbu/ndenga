<style>
  body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    max-width: 90%;
    margin: 0 auto;
    padding: 20px;
  }


  h1 {
    max-width: 100%;
    overflow: hidden;

  }

  .card_img {
    width: 300px;
  }

  .card_img img {
    width: 100%;
  }

  .card_img {
    border: 1px solid rgba(0, 0, 0, 0.1);
    margin-bottom: 100px;


  }

  .card_img p {
    margin: 20px;
    text-align: justify;
    max-height: 150px;


    overflow: hidden;
  }

  .parent_card_img {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    margin-top: 120px;
  }

  .voir_projet {
    margin: 25px;
    background: rgb(10, 12, 151);
    color: white;
    text-align: center;
    padding: 15px;
    border-radius: 7px;
  }

  /* Général */
  body {
    font-family: 'Poppins', sans-serif;
    line-height: 1.6;
    max-width: 90%;
    margin: 0 auto;
    padding: 20px;


  }

  /* Header */

  .title_projet {
    font-size: 2rem;
    font-weight: bold;
    text-align: center;
    flex: 1;
  }

  /* Barre de navigation */
  .elements {
    display: flex;
    gap: 20px;
  }

  .elements a {

    text-decoration: none;
    font-weight: bold;
    transition: color 0.3s ease-in-out;
  }

  header {
    box-shadow: 1px 3px 8px black;
    padding: 0;
  }

  .elements a:hover {}

  /* Titres */
  h1 {
    text-align: center;
    font-size: 2.5rem;
    margin-top: 20px;

  }

  /* Conteneur principal */
  .article-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 50px;
  }

  /* Titres des articles */
  .title_ {


    padding: 15px;

    text-align: center;
    width: 100%;
    max-width: 80%;
    font-size: 1.5rem;
    font-weight: bold;
    margin: 40px 0;
    margin: auto;
    margin-bottom: 100px;
  }

  /* Description */
  .description_projet_ {
    max-width: 80%;
    text-align: center;
    background: white;
    padding: 20px;

    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    margin: auto;
  }

  /* Images */
  .class_img {

    max-width: 60%;
    margin: 20px auto;
    border-radius: 8px;
    margin: auto;
    margin-bottom: 75px;
  }

  .class_img img {
    width: 100%;
    display: block;
    border-radius: 8px;

  }



  /* Scrollbar personnalisée */
  ::-webkit-scrollbar {
    width: 10px;
  }

  ::-webkit-scrollbar-track {
    background: #2c3e50;
    border-radius: 10px;
  }

  ::-webkit-scrollbar-thumb {
    background: #d4af37;
    border-radius: 10px;
  }

  /* Effet de défilement fluide */
  html {
    scroll-behavior: smooth;
  }

  /* Responsive */
  @media screen and (max-width: 768px) {
    header {
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    .elements {
      flex-direction: column;
      text-align: center;
      padding: 10px 0;
    }

    .class_img {
      width: 90%;
    }

    .description_projet_ {
      max-width: 90%;
    }
  }

  /* Header */
  header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 30px;
    background: #222;
    color: white;

    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
  }

  /* Titre centré */
  .title_projet {
    flex: 1;
    text-align: center;
    font-size: 2rem;
    font-weight: bold;
    letter-spacing: 1px;
    text-transform: uppercase;
  }

  /* Barre de navigation */
  .elements {
    display: flex;
    gap: 15px;
  }

  .elements a {
    color: white;
    text-decoration: none;
    font-weight: bold;
    padding: 10px 15px;


  }

  .elements a:hover {
    background: rgb(48, 10, 151);

  }

  .description_projet_,
  .description_projet_1 {
    text-align: justify;
  }
</style>