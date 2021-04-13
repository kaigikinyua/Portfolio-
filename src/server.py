from flask import Flask
app=Flask()

"""
requests:
    1.get userpage
        #get
            -json user todos
            -json user projects[list of projects]
        #post
            -done task[taskid]
            -new todo[title,desc,start,deadline]
            -new project
                -project tasks
                
    2.authentication pages
"""

if __name__=="__main__":
    app.debug=True
    app.run()