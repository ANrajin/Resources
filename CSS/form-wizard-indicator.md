>> HTML
```
<div class = "wizard-indicator-container">
    <ul>
        <li class="progress-bar-list completed">Job Information</li>
        <li class="progress-bar-list completed">Job Details</li>
        <li class="progress-bar-list current">Preview</li>
    </ul>
</div>
```

<br/>

>>CSS
```
    <style>
        .progress-bar-list{
            display: inline-block !important;
            width: 33.33% !important;
            position: relative !important;
            text-align: center !important;
            float: left !important;
        }

        .progress-bar-list:first-child::after {
            content: none;
        }

        .progress-bar-list::before {
            content: "";
            background-color: #E7E7E7;
            border-radius: 50%;
            display: flex;
            margin: 5px auto;
            transition: all;
            color: #fff;
            width: 25px;
            height: 25px;
            justify-content: center;
            align-items: center;
        }

        .progress-bar-list::after{
            content: "";
            background-color: #E7E7E7;
            padding: 0px 0px;
            position: absolute;
            top: 6px;
            left: -50%;
            width: 100%;
            height: 4px;
            margin: 9px auto;
            transition: all 0.8s;
            z-index: -1;
        }
        
        .current::before{
            font-family: "Bootstrap-Icons";
            content: "\F4CB";
            font-size: 12px;
            font-weight: 500;
            background-color: #893FAB;
            border: 1px solid #893FAB;
        }

        .current::after{
            background-color: #893FAB;
            border: 1px solid #893FAB;
        }

        .completed::before {
            font-family: "Bootstrap-Icons";
            content: "\F26B";
            font-size: 21px;
            background-color: #893FAB;
        }

        .completed::after {
            content: "";
            height: 4px;
            background-color: #893FAB
        }
    </style>
``