class Todo:
    def __init__(self,todoID):
        self.todoID=todoID
    def get_todo(self):
        pass
    def save_todo(self,todo,deadline,desc=""):
        pass
    def shelf_todo(self):
        pass
    def delete_todo(self):
        pass


class Project(Todo):
    def __init__(self,projectID):
        self.projectID=projectID

    def get_ProjectTasks(self):
        pass

    def addProjectTask(self,todo,deadline,desc=""):
        pass

    def shelf_project(self):
        pass
    
    def delete_project(self):
        pass

class User:
    def __init__(self,userToken):
        pass
    def createUser(self):
        pass
    def authUser(self):
        pass
    def deleteUser(self):
        pass
    def get_userProfile(self):
        pass
