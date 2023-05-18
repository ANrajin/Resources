> ## Chunk a collection of objects

```
const chunk = (items, size) => {
    return items.reduce((result, item, index) => {
        const chunkIndex = Math.floor(index / size);

        if (!result[chunkIndex]) {
            result[chunkIndex] = [];
        }

        result[chunkIndex].push(item);

        return result;
    }, []);
}
```
<br/>

> ## Example
```
source :

{
	"data": [
		{
			"name": "Debra P. Beggs",
		},
		{
			"name": "Brian G. McCarthy",
		},
		{
			"name": "Bette B. Peralta",
		},
		{
			"name": "Jamey J. Fikes",
		},
		{
			"name": "Benjamin P. Marini",
		},
	]
}
```

```
result: 

[
    {
        "name": "Debra P. Beggs",
    },
    {
        "name": "Brian G. McCarthy",
    }
],
[
    {
        "name": "Bette B. Peralta",
    },
    {
        "name": "Jamey J. Fikes",
    }
],
[
    {
        "name": "Benjamin P. Marini",
    },
]
```