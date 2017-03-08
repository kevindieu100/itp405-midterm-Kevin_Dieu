## Question 2
The potential problem when it comes to using ORM is the number of queries caused by
lazy loading. This causes the user to actually be making N+1 queries to the database,
causing the site to be slow with large amounts of queries. The solution to this is
by eager loading the data, as in grabbing all the data by simply using just one query.
