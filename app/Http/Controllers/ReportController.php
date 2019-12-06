<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class ReportController extends Controller
{
    public function neraca(Request $request)
    {
        /*
        $q = $request->get('periode');
        if ($q == "")
        {
            $periode=date_format(today(),"Y-m-d");
        }
        else
        {
            $periode = $q;
        }

        $cabang = $request->get('cabang');
        if ($cabang == "")
        {
            $cabang="HOF";
        }

        $ledgers1 = DB::connection('sqlsrv')
          ->select("SELECT 
                    noledg,
                    nmledg
                FROM [skyworx].[dbo].[glt_coa] 
                WHERE lvledg = 1
              ORDER BY noledg");
        $ledgers2 = DB::connection('sqlsrv')
          ->select("SELECT 
                    noledg,
                    nmledg
                FROM [skyworx].[dbo].[glt_coa] 
                WHERE lvledg = 2
              ORDER BY noledg");

        if ($cabang == "HOF")
        {        
            $ledgers = DB::connection('sqlsrv')
            ->select("SELECT 
                        a.noledg,
                        a.nmledg,
                        (SELECT sum(saldo) FROM [skyworx].[dbo].[glt_ledg] as b 
                     WHERE (periode = '".$periode."') AND a.noledg=b.noledg) as saldo    
                    FROM [skyworx].[dbo].[glt_coa] as a
                  WHERE  
                    a.lvledg = 3 ");
        }
        else
        {
            $ledgers = DB::connection('sqlsrv')
            ->select("SELECT 
                        a.noledg,
                        a.nmledg,
                        (SELECT saldo FROM [skyworx].[dbo].[glt_ledg] as b 
                     WHERE (periode = '".$periode."') AND (nocabg = '".$cabang."') AND a.noledg=b.noledg) as saldo    
                    FROM [skyworx].[dbo].[glt_coa] as a
                  WHERE  
                    a.lvledg = 3 ");
        }      
        */
            
           
        $ledgers = DB::connection('sqlsrv')
                ->select("SELECT TOP 1000 [ReportID]
                              ,[ReportCode]
                              ,[LineNbr]
                              ,[Description]
                              ,[Type]
                              ,[Format]
                              ,[Amount1]
                              ,[Amount2]
                              ,[Amount3]
                              ,[Amount4]
                              ,[Amount5]
                              ,[Amount6]
                              ,[Behaviour]
                              ,[Visible]
                          FROM [ALIF].[dbo].[GL_REPORT_RESULT_SET]
                            WHERE reportid=7429 ORDER BY LineNbr");   
        //dd($ledgers);
        return view('lapkeu.neraca',compact('ledgers'));
    }

    public function pnl(Request $request)
    {
        /*
        $q = $request->get('periode');
        if ($q == "")
        {
            $periode=date_format(today(),"Y-m-d");
        }
        else
        {
            $periode = $q;
        }

        $cabang = $request->get('cabang');
        if ($cabang == "")
        {
            $cabang="HOF";
        }

        $ledgers1 = DB::connection('sqlsrv')
          ->select("SELECT 
                    noledg,
                    nmledg
                FROM [skyworx].[dbo].[glt_coa] 
                WHERE lvledg = 1
              ORDER BY noledg");
        $ledgers2 = DB::connection('sqlsrv')
          ->select("SELECT 
                    noledg,
                    nmledg
                FROM [skyworx].[dbo].[glt_coa] 
                WHERE lvledg = 2
              ORDER BY noledg");

        if ($cabang == "HOF")
        {        
            $ledgers = DB::connection('sqlsrv')
            ->select("SELECT 
                        a.noledg,
                        a.nmledg,
                        (SELECT sum(saldo) FROM [skyworx].[dbo].[glt_ledg] as b 
                     WHERE (periode = '".$periode."') AND a.noledg=b.noledg) as saldo    
                    FROM [skyworx].[dbo].[glt_coa] as a
                  WHERE  
                    a.lvledg = 3 ");
        }
        else
        {
            $ledgers = DB::connection('sqlsrv')
            ->select("SELECT 
                        a.noledg,
                        a.nmledg,
                        (SELECT saldo FROM [skyworx].[dbo].[glt_ledg] as b 
                     WHERE (periode = '".$periode."') AND (nocabg = '".$cabang."') AND a.noledg=b.noledg) as saldo    
                    FROM [skyworx].[dbo].[glt_coa] as a
                  WHERE  
                    a.lvledg = 3 ");
        } 
        */

        $ledgers = DB::connection('sqlsrv')
                ->select("SELECT TOP 1000 [ReportID]
                              ,[ReportCode]
                              ,[LineNbr]
                              ,[Description]
                              ,[Type]
                              ,[Format]
                              ,[Amount1]
                              ,[Amount2]
                              ,[Amount3]
                              ,[Amount4]
                              ,[Amount5]
                              ,[Amount6]
                              ,[Behaviour]
                              ,[Visible]
                          FROM [ALIF].[dbo].[GL_REPORT_RESULT_SET]
                            WHERE reportid=7430 ORDER BY LineNbr");          
        
        return view('lapkeu.pnl',compact('ledgers'));
    }

    public function trialbalance(Request $request)
    {
        
        $q = $request->get('periode');
        if ($q == "")
        {
            $periode=date_format(today(),"Y-m-d");
        }
        else
        {
            $periode = $q;
        }

        $cabang = $request->get('cabang');
        if ($cabang == "")
        {
            $cabang="HOF";
        }
        

        $ledgers1 = DB::connection('sqlsrv')
          ->select("SELECT 
                    ID,
                    Description
                FROM [ALIF].[dbo].[COA]
                WHERE lvl = 'GL' and status = 1
              ORDER BY ID");
        $ledgers2 = DB::connection('sqlsrv')
          ->select("SELECT 
                    ID,
                    Description,
                    GL_ACCOUNT
                FROM [ALIF].[dbo].[COA]
                WHERE lvl = 'SL' and status=1
              ORDER BY ID");

        /*
        if ($cabang == "HOF")
        {
        */        
            $ledgers = DB::connection('sqlsrv')
            ->select("SELECT 
                        a.ID,
                        a.Description,
                        (SELECT sum(ytdbal) FROM [ALIF].[dbo].[acct_hist] as b 
                        WHERE (fiscyr = 2019) AND a.ID=b.Acc) as saldo,
                        a.SL_ACCOUNT  
                    FROM [ALIF].[dbo].[COA] as a
                  WHERE  
                    a.lvl = 'SSL' and a.status = 1 ");
        /*
        }
        else
        {
            $ledgers = DB::connection('sqlsrv')
            ->select("SELECT 
                        a.noledg,
                        a.nmledg,
                        (SELECT saldo FROM [skyworx].[dbo].[glt_ledg] as b 
                     WHERE (periode = '".$periode."') AND (nocabg = '".$cabang."') AND a.noledg=b.noledg) as saldo    
                    FROM [skyworx].[dbo].[glt_coa] as a
                  WHERE  
                    a.lvledg = 3 ");
        }
        */        
        
        return view('lapkeu.trialbalance',compact('ledgers','ledgers1','ledgers2','periode','cabang'));
    }

    public function dbsales(Request $request)
    {
        $q = $request->get('q');
       
        //$ledgers = DB::connection('sqlsrv')
        //    ->select('select * from glt_ledg');
        
        return view('dashboard.sales');
    }

    public function dbops(Request $request)
    {
        $q = $request->get('q');
       
        //$ledgers = DB::connection('sqlsrv')
        //    ->select('select * from glt_ledg');
        
        return view('dashboard.ops');
    }

    public function dbproject(Request $request)
    {
        $q = $request->get('q');
       
        //$ledgers = DB::connection('sqlsrv')
        //    ->select('select * from glt_ledg');
        
        return view('dashboard.project');
    }
}
