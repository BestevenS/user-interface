Το intellij project υπάρχει μέσα στο φάκελο rest.

Τα βήματα για να δείτε τι έχω κάνει είναι τα εξής:

1.	Φτιάξτε ένα νέο database με όνομα trip
    Σημείωση: Στη δική μου σύνδεση με τη βάση δεν ειχα password

2.	Τρέξτε το project του intellij που θα βρείτε στον φάκελο

3.	Έχω ένα δικό μου trip.sql αρχείο, σε περίπτωση που έχετε άλλα 
    ονόματα στα columns και δεν σας παίζει

4.  Εάν θέλετε μπορείτε για τα posts των users & trips να χρησιμοποιήσετε
    τα 2 JSONs που εχω φτιάξει στον φάκελο root(/) φακελο του zip

Σε αυτό το σημείο η βάση είναι έτοιμη για να δεχθεί κάθε crud μέθοδο

● GET       /api/v1/users              localhost:8080/users
● POST      /api/v1/users              localhost:8080/users
● GET       /api/v1/users/{userId}     localhost:8080/users/1
● PUT       /api/v1/users/{userId}     localhost:8080/users/1
● DELETE    /api/v1/users/{userId}     localhost:8080/users/1

● GET       /api/v1/trips              localhost:8080/trips
● POST      /api/v1/trips              localhost:8080/trips
● GET       /api/v1/trips/{tripID}     localhost:8080/trips/1
● PUT       /api/v1/trips/{tripID}     localhost:8080/trips/1
● DELETE    /api/v1/trips/{tripID}     localhost:8080/trips/1


Καλή συνέχεια και καλές γιορτές