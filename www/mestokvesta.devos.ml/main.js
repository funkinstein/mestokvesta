var app = {}; // create namespace for our app
app.Todo = Backbone.Model.extend({
  defaults: {
    title: '',
    completed: false
  }
});
app.TodoList = Backbone.Collection.extend({
  model: app.Todo,
  localStorage: new Store("backbone-todo")
});
// renders individual todo items list (li)