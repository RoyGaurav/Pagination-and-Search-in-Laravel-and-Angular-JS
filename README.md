We will be using Laravel(A PHP Framework) as a backend and Angular JS as a frontend. Pagination in Laravel and Angular combination can be implemented in a number of ways. But we are going to talk about the few of the most common approach in this tutorial.

##Approach 1: We can fetch the entire record at a time from the laravel back-end and then implement pagination at the angular front-end. This approach will work very well in case of small data-set but in case the data-set becomes very large, fetching the entire data in a single POST/GET request will take lots of time for the browser to load the page completely. Hence the use of such approach is highly discouraged.

##Approach 2: In this approach, one applies pagination at the back-end only. This approach will be slower as compared to approach 1 in case of small data-set but will be slightly better than approach 1 in case of large data-set because the browser has to load a very small chunk of day i.e., number of records per page. Hence one can go for this approach if they are dealing with a large sample size

##Approach 3: This approach will be the combination of pagination at both back-end and front-end. As per this approach, there is a pagination at the back-end and one at front-end and on every next, a set of records are fetched and are appended to the already fetched results(if not already fetched) which are handled with the front-end pagination. This type of pagination not only reduces the number of request to the server but also improves the overall performance of the app/website. In this tutorial, we will implement approach 3.

##Note: Approach 1 will be fastest if we are dealing with small data-set. But in case of large data-set approach 3 will be fastest.

Please visit http://www.acodehub.com/posts/implementing-search-and-pagination-in-laravel-and-angular-js for full implementation explanation
