"""
Utility functions to be used by the scripts to manage various resources
and keep the scripts consistent
"""
import json,requests,os,random
class JsonFile:
    @staticmethod
    def loadData(filepath):
        with open(filepath,'r') as f:
            try:
                data=json.load(f)
            except:
                Messages.error("Could not generate users")
                data=False
        return data
    @staticmethod
    def fetchField(filepath,field):
        data=JsonFile.loadData(filepath)
        return data[field]

    @staticmethod
    def exportJson(filepath,data,fieldname="users"):
        f=Files(filepath)
        if(f.readFile()!=None):
            json_data=json.dumps({fieldname:data})
            res=f.writeFile(json_data,append=False)
            return JsonFile.handleExportRes(res,data,filepath)
        else:
            res=f.writeFile(data,append=False)
            return JsonFile.handleExportRes(res,data,filepath)

    @staticmethod
    def handleExportRes(res,data,filepath):
        if(res==False):
            Messages.error("Could not export data to file {f}".format(f=filepath))
            return False
        else:
            Messages.success("Exported data {d} to file {f}".format(d=data,f=filepath))
            return True

class Messages:
    c_warning='\033[93m'
    OKBLUE = '\033[94m'
    OKCYAN = '\033[96m'
    OKGREEN = '\033[92m'
    FAIL = '\033[91m'
    ENDC = '\033[0m'
    @staticmethod
    def error(message,log=False):
        Messages.printMessage(Messages.FAIL,"[Err]",message)
    @staticmethod
    def success(message,log=False):
        Messages.printMessage(Messages.OKGREEN,"[OK]",message)
    @staticmethod
    def warning(message,log=False):
        Messages.printMessage(Messages.c_warning,"[Warning]",message)
    @staticmethod
    def printMessage(mess_col,messagetype,message):
        print("{mc} {mt} {m} {c}".format(mc=mess_col,mt=messagetype,m=message,c=Messages.ENDC))
    @staticmethod
    def cliInput(message):
        Messages.printMessage(Messages.OKCYAN,"{m}\n".format(m=message))
    @staticmethod
    def logEvent(message,logtype="error"):
        l=Logs(logtype)
        l.log(message)

class Logs:
    def __init__(self,logtype):
        logtypes=["error","success","warning"]
        if(logtype in logtypes):
            self.logtype=logtype
            self.logsLocation="./Logs"
            self.logFiles={"error":"error.txt","success":"success.txt","warning":"warning.txt"}
        else:
            Messages.error("Logtype {l} is not in logtypes".format(l=logtype),log=False)
    def log(self,message):
        f=Files()
        res=f.writeFile(str(message)+"\n",append=True)
        if(res!=False):
            Messages.printMessage(Messages.FAIL,'[Err]',"Could not log event to logs")