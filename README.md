### Template Into Laravel

How to import templates into Laravel Application?

Here are some of the templates I want to demostrate, how to import templates into Laravel application.

More details written in my blog post [Laravel: Import Templates into Laravel](https://blog.nasrulhazim.com/?p=1527&preview=true)

I'm going to import Tabler template in this repo. You may want to choose other template as well.

- [x] [Tabler](https://tabler.github.io/)
- [ ] [Adminator](https://github.com/puikinsh/Adminator-admin-dashboard) 
- [ ] [Stellar](https://github.com/BootstrapDash/Stellar)

Basically the steps is:

1. Clone / Download the template into `resources/assets/templates/template-name`
2. Install dependencies for templates by navigating to `resources/assets/templates/template-name`. For this particular step, it depends on template. There is template require you to install the dependencies like Adminator some template already compiled it for you like Tabler - so your work will be much simpler - skip to next step.
3. Copy compiled templates asset to public directory, by specify in `webpack.mix.js`. But first, if you are first time setup the template, make sure to `npm install` or `yarn install` your application. Only then you can update `webpack.mix.js` like the following:

	```javascript
	mix.js('resources/assets/js/app.js', 'public/js')
	   .sass('resources/assets/sass/app.scss', 'public/css')
	   .copy('resources/assets/templates/tabler/dist/assets', 'public/tabler/');
	```

Once you are done 3 steps above, run `npm run prod`. This will simply compile your resource assets, and copy it to public directory. That's it!

Now you are ready to use all the template's assets. In this repository - I will use Tabler - just rewrite back all views to table format.





