>> ## String Extension (Remove hyper link from text)
```
using System.Text;
using System.Text.RegularExpressions;

namespace DevSkill.Web.Extensions
{
    public static class StringExtensions
    {
        private static string[] _patterns = {
            @"https?://[^\s/$.?#].[^\s]*",
            @"http?://[^\s/$.?#].[^\s]*",
            "<a [^>]*href=(?:'(?<href>.*?)')|(?:\"(?<href>.*?)\")"
        };

        public static string ReplaceHyperlink(this string value, string replaceWith = null)
        {
            var result = value;

            foreach (var pattern in _patterns)
            {
                var regex = new Regex(pattern, RegexOptions.IgnoreCase);
                result = Regex.Replace(result, regex.ToString(), replaceWith);
            }

            return result;
        }
    }
}
```


>> ## Validation Attribute Extension (Check for valid date range)

```
using System;
using System.ComponentModel.DataAnnotations;
using System.Reflection;

namespace DevSkill.Http.Attributes
{
    public class ValidDateRangeAttribute : ValidationAttribute
    {
        protected override ValidationResult IsValid(object value, ValidationContext validationContext)
        {
            if (value == null)
            {
                return ValidationResult.Success;
            }

            PropertyInfo property = validationContext.ObjectType.GetProperty("StartDate");
            PropertyInfo property2 = validationContext.ObjectType.GetProperty("EndDate");
            string memberName = validationContext.MemberName;
            if (!(memberName == "StartDate"))
            {
                if (memberName == "EndDate" && property?.GetValue(validationContext.ObjectInstance) != null)
                {
                    DateTime dateTime = (DateTime)(property?.GetValue(validationContext.ObjectInstance));
                    if ((DateTime)value < dateTime)
                    {
                        return new ValidationResult(base.ErrorMessage ?? "End date must be greater than start date!");
                    }
                }
            }
            else if (property2?.GetValue(validationContext.ObjectInstance) != null)
            {
                DateTime dateTime2 = (DateTime)(property2?.GetValue(validationContext.ObjectInstance));
                if ((DateTime)value > dateTime2)
                {
                    return new ValidationResult(base.ErrorMessage ?? "Start date must be less than end date!");
                }
            }

            return ValidationResult.Success;
        }
    }
}
```

>> ## Validation Attribute Extension (Valid Salary Range)

```
using System.ComponentModel.DataAnnotations;

namespace ValidSalaryRange.ValidationAttributes
{
    public class ValidSalaryRangeAttribute : ValidationAttribute
    {
        private readonly string _compareWith;
        private readonly int _minimumRange;
        private readonly int _maximumRange;
        private readonly int _multiplyOfComparer;

        public ValidSalaryRangeAttribute(string compareWith)
        {
            _compareWith = compareWith;
        }

        public ValidSalaryRangeAttribute(string compareWith, int multiplyOfComparer)
        {
            _compareWith=compareWith;
            _multiplyOfComparer = multiplyOfComparer;
        }

        public ValidSalaryRangeAttribute(string compareWith, int minimumRange, int maximumRange)
        {
            _compareWith = compareWith;
            _minimumRange = minimumRange;
            _maximumRange = maximumRange;
        }

        public ValidSalaryRangeAttribute(string compareWith, int minimumRange, int maximumRange, int multiplyOfComparer)
        {
            _compareWith = compareWith;
            _minimumRange = minimumRange;
            _maximumRange = maximumRange;
            _multiplyOfComparer = multiplyOfComparer;
        }

        #pragma warning disable CS8765
        protected override ValidationResult IsValid(object value, ValidationContext validationContext)
        #pragma warning restore CS8765 
        {
            if(value is null) return new ValidationResult(errorMessage: ErrorMessage ?? "Maximum salary cannot be null");

            var minimumSalary = (validationContext.ObjectType.GetProperty(_compareWith)?
                .GetValue(validationContext.ObjectInstance)) ?? 
                throw new InvalidOperationException("Invalid property name provided!");

            if(_minimumRange != 0 && (int) minimumSalary < _minimumRange)
                return new ValidationResult(errorMessage: ErrorMessage ?? $"The minimum salary range is {_minimumRange}!");

            if ((int)minimumSalary > (int)value)
                return new ValidationResult("Maximum salary must be greater than or equal to minimum salary!");

            if (_maximumRange > 0 && (int)value > _maximumRange)
                return new ValidationResult($"Maximum salary must not exceed the range {_maximumRange}!");

            if(_multiplyOfComparer > 0 && (int)value > ((int) minimumSalary * _multiplyOfComparer))
            {
                int validRange = ((int)minimumSalary * _multiplyOfComparer);
                return new ValidationResult($"Maximum salary must not exceed the range {validRange}!");
            }

            return ValidationResult.Success!;
        }
    }
}

```