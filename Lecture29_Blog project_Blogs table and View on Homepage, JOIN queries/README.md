
## Lecture 29
 - Create database table for blog posts (id, title, image, content, category(Forign Key),  created-at, updated-at,)
 - Forign keys(Concept of relational database)
   - It links one database table to another(relationship between database tables)
   - For example in blog posts we store ID of each category as forign key

 - Insert some dummy data
   - For Images we create a separate folder(uploads) in project base directory
 - Show that blogs data on homepage

 - JOIN Queries
  - When selection data from database tables we can get multiple tables using join queries
   SELECT * from blog_posts JOIN categories category = catgories.id


## Next Class
 - Make blog posts Clickable
 - Create a separate page to show single blog post
 - On Single blog posts we will show related blog posts
 - User comments section