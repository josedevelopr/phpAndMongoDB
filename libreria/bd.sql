use lareal;

show dbs;

db.usuarios.insert({'email':'adamix@gmail.com','nombre':'Amadia Suarez','clave':'123'});

db.usuarios.find().pretty();

db.usuarios.find({'nombre':/Amadia/}).pretty();

